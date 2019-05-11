<div class="athlete-record wrap">
    <section class="athlete-record__bloc">
        <h4 class="title title__blue title__left title-size" aria-level="4" role="heading">Records personnels</h4>
        <table class="athlete-record__table">
            <thead>
            <tr class="athlete-record__table-legend">
                <th class="athlete-record__table-title">Discipline</th>
                <th class="athlete-record__table-title">Record</th>
                <th class="athlete-record__table-title">Lieu</th>
                <th class="athlete-record__table-title">Date</th>
            </tr>
            </thead>
            <tbody class="athlete-record__table-tbody">
            @if(!empty($athlete->records))
                <?php $records = json_decode($athlete->records, true); ?>
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
    <section class="athlete-record__bloc">
        <h4 class="title title__blue title__left title-size" aria-level="4" role="heading">&Eacute;volution</h4>
        <table class="athlete-record__table">
            <thead>
            <tr class="athlete-record__table-legend">
                <th class="athlete-record__table-title">Année</th>
                <th class="athlete-record__table-title">Catégorie</th>
                @foreach($athlete->disciplines as $discipline)
                    <th class="athlete-record__table-title">{{ $discipline->name }}</th>
                @endforeach
            </tr>
            </thead>
            <tbody class="athlete-record__table-tbody">
            @if(!empty($athlete->evolution))
                <?php $evolutions = json_decode($athlete->evolution, true); ?>
                @foreach($evolutions as $row)
                    <tr class="athlete-record__table-row">
                        <td>{{ $row['annee'] }}</td>
                        <td>{{ $row['categorie'] }}</td>
                        @if(!empty ($row['disciplineone']))
                            <td>{{ $row['disciplineone'] }}</td>
                        @else
                            <td>-</td>
                        @endif
                        @if(!empty ($row['disciplinetwo']))
                            <td>{{ $row['disciplinetwo'] }}</td>
                        @else
                            <td>-</td>
                        @endif
                        @if(!empty ($row['disciplinethree']))
                            <td>{{ $row['disciplinethree'] }}</td>
                        @else
                            <td>-</td>
                        @endif
                    </tr>
                @endforeach
            @else
                <tr class="athlete-record__table-row">
                    <td>Aucune évolution</td>
                </tr>
            @endif
            </tbody>
        </table>
    </section>
</div>