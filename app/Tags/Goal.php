<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class Goal extends Tags
{
    public function index()
    {
        switch ($this->context->raw('task_type')) {
            case 'increase':
                $index = $this->increase( $this->context->raw('starting_value'), $this->context->raw('current_value'), $this->context->raw('target_value') );
            break;
            case 'decrease':
                $index = $this->decrease( $this->context->raw('starting_value'), $this->context->raw('current_value'), $this->context->raw('target_value') );
            break;
            case 'bool':
                $index = $this->bool( $this->context->raw('is_done') );
            break;
            default:
                $index = 0;
            break;
        }

        return $index;
    }

    public function general()
    {
        $subtasks = $this->context->raw('subtasks');
        $number_of_subtasks = count( $subtasks );
        $number_of_completed_tasks = 0;

        foreach( $subtasks as $subtask ) {
            switch ( $subtask['task_type'] ) {
                case 'increase':
                    $value = $this->increase( $subtask['starting_value'], $subtask['current_value'], $subtask['target_value'] );
                    $is_completed_value = $value >= 100;
                break;
                case 'decrease':
                    $value = $this->decrease( $subtask['starting_value'], $subtask['current_value'], $subtask['target_value'] );
                    $is_completed_value = $value >= 100;
                break;
                case 'bool':
                    $value = $this->bool( $subtask['is_done'] );
                    $is_completed_value = $subtask['is_done'];
                break;
                default:
                    $value = 0;
                    $is_completed_value = false;
                break;
            }

            if ( $is_completed_value ) {
                $number_of_completed_tasks++;
            }
        }

        return (int) round($number_of_completed_tasks/$number_of_subtasks*100);
    }

    public function increase( $starting_value, $current_value, $target_value )
    {
        return (int) round( ($current_value - $starting_value) / ( $target_value - $starting_value ) * 100 );
    }

    public function decrease( $starting_value, $current_value, $target_value )
    {
        return (int) round( ($starting_value - $current_value) / ( $starting_value - $target_value ) * 100 );
    }

    public function bool( $is_done )
    {
        return $is_done ? 100 : 0;
    }

    public function is_done($value)
    {
        return ($value === 100) ? true : false;
    }
}
