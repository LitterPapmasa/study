<?php
$raw = '22. 11. 1968';
$start = \DateTime::createFromFormat('d. m. Y', $raw);

echo 'Start date: ' . $start->format('m/d/Y') . "\n";

echo '<br>';
// создает копию $start и добавляет 1 месяц и 6 дней
$end = clone $start;
$end->add(new \DateInterval('P1M6D'));

$diff = $end->diff($start);
echo 'Difference: ' . $diff->format('%m месяц, %d дней (total: %a дней)') . "\n";
// Разница : 1 месяц, 6 дней (всего : 37 дней)

echo '<br>';
// выводит все четверги между началом и концом
$periodInterval = \DateInterval::createFromDateString('first thursday');
$periodIterator = new \DatePeriod($start, $periodInterval, $end, \DatePeriod::EXCLUDE_START_DATE);
foreach ($periodIterator as $date) {
    // вывести каждую дату в периоде
    echo $date->format('m/d/Y') . ' ';
}
