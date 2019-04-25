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
                <tr class="athlete-record__table-row">
                    @foreach($records as $row)
                        <td>{{ $row['discipline'] }}</td>
                        <td>{{ $row['record'] }}</td>
                        <td>{{ $row['lieu'] }}</td>
                        <td>{{ $row['date'] }}</td>
                    @endforeach
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
                <th class="athlete-record__table-title">1500m</th>
                <th class="athlete-record__table-title">500m</th>
            </tr>
            </thead>
            <tbody class="athlete-record__table-tbody">
            <tr class="athlete-record__table-row">
                <td>2012</td>
                <td>Espoir</td>
                <td>3.40.97</td>
                <td>-</td>
            </tr>
            <tr class="athlete-record__table-row">
                <td>2013</td>
                <td>Senior</td>
                <td>3.38.61</td>
                <td>-</td>
            </tr>
            <tr class="athlete-record__table-row">
                <td>2014</td>
                <td>Senior</td>
                <td>3.38.20</td>
                <td>13.34.90</td>
            </tr>
            <tr class="athlete-record__table-row">
                <td>2015</td>
                <td>Senior</td>
                <td>3.41.44</td>
                <td>-</td>
            </tr>
            <tr class="athlete-record__table-row">
                <td>2016</td>
                <td>Senior</td>
                <td>-</td>
                <td>13.52.11</td>
            </tr>
            <tr class="athlete-record__table-row">
                <td>2017</td>
                <td>Senior</td>
                <td>-</td>
                <td>14.15.98</td>
            </tr>
            <tr class="athlete-record__table-row">
                <td>2018</td>
                <td>Senior</td>
                <td>3.38.61</td>
                <td>-</td>
            </tr>
            </tbody>
        </table>
    </section>
</div>