<section class="horaires-competition wrap">
    <h2 class="title title__blue title__center title-size" aria-level="2" role="heading">Horaires de la compétition</h2>
    <div class="horaires-competition__container">
        <div class="horaires-competition__header">
            <span class="horaires-competition__header-title">Hommes</span>
            <span class="horaires-competition__header-title">Femmes</span>
        </div>
        <div class="horaires-competition__bloc">
            <table class="horaires-competition__table">
                @if(!empty($competition->horaires_h))
                    <thead class="horaires-competition__thead">
                    <tr class="horaires-competition__table-legend">
                        <th class="horaires-competition__table-title">Début</th>
                        <th class="horaires-competition__table-title">Fin</th>
                        <th class="horaires-competition__table-title">Catégorie</th>
                        <th class="horaires-competition__table-title">Discipline</th>
                    </tr>
                    </thead>
                    <tbody class="horaires-competition__tbody">
                    <?php $horairesHommes = json_decode($competition->horaires_h, true); ?>
                    @foreach($horairesHommes as $row)
                        <tr class="horaires-competition__table-row">
                            <td>{{ $row['debut'] }}</td>
                            <td>{{ $row['fin'] }}</td>
                            <td>{{ $row['categorie'] }}</td>
                            <td>{{ $row['discipline'] }}</td>
                        </tr>
                    @endforeach
                    @else
                        <tr class="horaires-competition__table-row">
                            <td class="horaires-competition__table-row horaires-competition__table-row--empty-horaire">
                                Aucun horaire pour le moment
                            </td>
                        </tr>
                    </tbody>
                @endif
            </table>
            <table class="horaires-competition__table">
                @if(!empty($competition->horaires_f))
                    <thead class="horaires-competition__thead">
                    <tr class="horaires-competition__table-legend">
                        <th class="horaires-competition__table-title">Début</th>
                        <th class="horaires-competition__table-title">Fin</th>
                        <th class="horaires-competition__table-title">Catégorie</th>
                        <th class="horaires-competition__table-title">Discipline</th>
                    </tr>
                    </thead>
                    <tbody class="horaires-competition__tbody">
                    <?php $horairesFemmes = json_decode($competition->horaires_f, true); ?>
                    @foreach($horairesFemmes as $row)
                        <tr class="horaires-competition__table-row">
                            <td>{{ $row['debut'] }}</td>
                            <td>{{ $row['fin'] }}</td>
                            <td>{{ $row['categorie'] }}</td>
                            <td>{{ $row['discipline'] }}</td>
                        </tr>
                    @endforeach
                    @else
                        <tr class="horaires-competition__table-row">
                            <td class="horaires-competition__table-row horaires-competition__table-row--empty-horaire">
                                Aucun horaire pour le moment
                            </td>
                        </tr>
                    </tbody>
                @endif
            </table>
        </div>
    </div>
</section>