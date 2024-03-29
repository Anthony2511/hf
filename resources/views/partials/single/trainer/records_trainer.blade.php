<div class="athlete-record wrap">
    <section class="athlete-record__bloc">
        <h3 class="title title__blue title__left title-size" aria-level="3">Records personnels</h3>
        <table class="athlete-record__table">
            <caption class="hidden">Tableau des records</caption>
            <thead>
            <tr class="athlete-record__table-legend">
                <th class="athlete-record__table-title">Discipline</th>
                <th class="athlete-record__table-title">Record</th>
                <th class="athlete-record__table-title">Lieu</th>
                <th class="athlete-record__table-title">Date</th>
            </tr>
            </thead>
            <tbody class="athlete-record__table-tbody">
            @if(!empty($trainer->records))
                <?php $records = json_decode($trainer->records, true); ?>
                @foreach($records as $row)
                    <tr class="athlete-record__table-row">
                        <td>{{ $row['discipline'] }}</td>
                        <td>{{ $row['record'] }}</td>
                        <td>{{ $row['lieu'] }}</td>
                        <td>{{ $row['date'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr class="athlete-record__table-row">
                    <td>Aucun record</td>
                </tr>
            @endif
            </tbody>
        </table>
    </section>
</div>