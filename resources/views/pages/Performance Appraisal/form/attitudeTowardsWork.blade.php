<div class="card col-12 mt-3">
    <div class="card-header">
        <h4>Part III – Attitude Towards Work / Sikap terhadap pekerjaan</h4>
    </div>
    <div class="card-body table-responsive">
        <table class="table" id="part_iii_table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Keterangan Terperinci</th>
                    <th>9</th>
                    <th>8</th>
                    <th>7</th>
                    <th>6</th>
                    <th>5</th>
                    <th>Remarks/Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @php
                $attitudeCategories = [
                'Attitude to Supervisor',
                'Attitude to Colleagues',
                'Initiative',
                'Attendance',
                'Punctuality',
                ];
                @endphp
                @foreach ($attitudeCategories as $index => $category)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $category }}</td>
                    <td><input type="radio" name="{{ strtolower(str_replace(' ', '_', $category)) }}" value="9"
                            required></td>
                    <td><input type="radio" name="{{ strtolower(str_replace(' ', '_', $category)) }}" value="8"
                            required></td>
                    <td><input type="radio" name="{{ strtolower(str_replace(' ', '_', $category)) }}" value="7"
                            required></td>
                    <td><input type="radio" name="{{ strtolower(str_replace(' ', '_', $category)) }}" value="6"
                            required></td>
                    <td><input type="radio" name="{{ strtolower(str_replace(' ', '_', $category)) }}" value="5"
                            required></td>
                    <td><input type="text" class="form-control"
                            name="{{ strtolower(str_replace(' ', '_', $category . '_remarks')) }}"></td>

                </tr>
                @endforeach
                <tr>
                    <td colspan="1" class="text-right"><strong>Total :</strong></td>
                    <td colspan="10"><input type="text" class="form-control" id="part_iii_total" name="part_iii_total"
                            readonly></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>