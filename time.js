START=`date +%s%N | cut -b1-13`
npm run prod && END=`date +%s%N | cut -b1-13`

echo $(($END-$START))

