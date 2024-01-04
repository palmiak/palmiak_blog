<?php

namespace App\Tags;

use Statamic\Tags\Tags;

class Goal extends Tags
{
    /**
     * The {{ goal }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        switch ($this->context->raw('task_type')) {
            case 'increase':
                return $this->increase();
            break;
            case 'decrease':
                return $this->decrease();
            break;
            case 'bool':
                return $this->bool();
            break;
            default:
                return 0;
            break;
        }
    }

    public function general()
    {
        $subtasks = $this->context->raw('subtasks');
        $number_of_subtasks = count( $subtasks );
        $number_of_completed_tasks = 0;

        foreach( $subtasks as $subtask ) {
            if ( $subtask['is_done'] ) {
                $number_of_completed_tasks++;
            }
        }

        return round($number_of_completed_tasks/$number_of_subtasks*100);
    }

    public function increase()
    {
        return round( ($this->context->raw('current_value') - $this->context->raw('starting_value')) / ( $this->context->raw('target_value') - $this->context->raw('starting_value') ) * 100 );
    }

    public function decrease()
    {
        return round( ($this->context->raw('starting_value') - $this->context->raw('current_value')) / ( $this->context->raw('starting_value') - $this->context->raw('target_value') ) * 100 );
    }

    public function bool()
    {
        return ($this->context->raw('is_done')) ? 100 : 0;
    }
}
