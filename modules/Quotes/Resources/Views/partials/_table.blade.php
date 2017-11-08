<div class="card">
    <table class="table">
        <thead>
            <tr>
                <th>Quote</th>
                <th>By</th>
                <th> </th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($quotes as $quote)
                <tr>
                    <td>{{ $quote->body }}</td>
                    <td>{{ $quote->by }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
