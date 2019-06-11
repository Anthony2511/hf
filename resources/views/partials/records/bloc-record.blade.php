<section class="record-intro wrap">
    <h2 aria-level="2" class="title title__blue title__center">Les records du club</h2>
    <p class="contact-intro__text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis, sem id
        volutpat vulputate, felis dui pellentesque turpis, in suscipit enim quam sit amet
        lorem. Praesent porttitor tellus id sapien pellentesque sagittis. Mauris at aliquet
        dui. Fusce in magna ac ex ultrices iaculis non at ex.
    </p>
    <table class="record-intro__table">
        <caption class="athlete-intro__title-infos record-intro__margin">Benjamin garçons</caption>
        <thead>
        <tr class="athlete-record__table-legend">
            <th class="record-intro__table-title">Discipline</th>
            <th class="record-intro__table-title">Record</th>
            <th class="record-intro__table-title">Athlète</th>
            <th class="record-intro__table-title">Lieu</th>
            <th class="record-intro__table-title">Date</th>
        </tr>
        </thead>
        <tbody class="athlete-record__table-tbody">
        <tr class="athlete-record__table-row">
        <?php $records = json_decode($page->record_benjaminhommes, true); ?>
        @foreach($records as $row)
            <tr class="athlete-record__table-row">
                <td>{{ $row['discipline'] }}</td>
                <td>{{ $row['record'] }}</td>
                <td>{{ $row['athlete'] }}</td>
                <td>{{ $row['lieu'] }}</td>
                <td>{{ $row['date'] }}</td>
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
    <table class="record-intro__table">
        <caption class="athlete-intro__title-infos record-intro__margin">Benjamin filles</caption>
        <thead>
        <tr class="athlete-record__table-legend">
            <th class="record-intro__table-title">Discipline</th>
            <th class="record-intro__table-title">Record</th>
            <th class="record-intro__table-title">Athlète</th>
            <th class="record-intro__table-title">Lieu</th>
            <th class="record-intro__table-title">Date</th>
        </tr>
        </thead>
        <tbody class="athlete-record__table-tbody">
        <tr class="athlete-record__table-row">
        <?php $records = json_decode($page->record_benjaminfilles, true); ?>
        @foreach($records as $row)
            <tr class="athlete-record__table-row">
                <td>{{ $row['discipline'] }}</td>
                <td>{{ $row['record'] }}</td>
                <td>{{ $row['athlete'] }}</td>
                <td>{{ $row['lieu'] }}</td>
                <td>{{ $row['date'] }}</td>
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
    <table class="record-intro__table">
        <caption class="athlete-intro__title-infos record-intro__margin">Pupilles Garçons</caption>
        <thead>
        <tr class="athlete-record__table-legend">
            <th class="record-intro__table-title">Discipline</th>
            <th class="record-intro__table-title">Record</th>
            <th class="record-intro__table-title">Athlète</th>
            <th class="record-intro__table-title">Lieu</th>
            <th class="record-intro__table-title">Date</th>
        </tr>
        </thead>
        <tbody class="athlete-record__table-tbody">
        <tr class="athlete-record__table-row">
        <?php $records = json_decode($page->record_pupilleshommes, true); ?>
        @foreach($records as $row)
            <tr class="athlete-record__table-row">
                <td>{{ $row['discipline'] }}</td>
                <td>{{ $row['record'] }}</td>
                <td>{{ $row['athlete'] }}</td>
                <td>{{ $row['lieu'] }}</td>
                <td>{{ $row['date'] }}</td>
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
    <table class="record-intro__table">
        <caption class="athlete-intro__title-infos record-intro__margin">Pupilles Filles</caption>
        <thead>
        <tr class="athlete-record__table-legend">
            <th class="record-intro__table-title">Discipline</th>
            <th class="record-intro__table-title">Record</th>
            <th class="record-intro__table-title">Athlète</th>
            <th class="record-intro__table-title">Lieu</th>
            <th class="record-intro__table-title">Date</th>
        </tr>
        </thead>
        <tbody class="athlete-record__table-tbody">
        <tr class="athlete-record__table-row">
        <?php $records = json_decode($page->record_pupillesfilles, true); ?>
        @foreach($records as $row)
            <tr class="athlete-record__table-row">
                <td>{{ $row['discipline'] }}</td>
                <td>{{ $row['record'] }}</td>
                <td>{{ $row['athlete'] }}</td>
                <td>{{ $row['lieu'] }}</td>
                <td>{{ $row['date'] }}</td>
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
</section>