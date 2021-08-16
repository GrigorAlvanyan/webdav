<div class="col-md-10">


    <ul>
        @forelse($data as $k => $value)
            <li>{{ $k . '=>' . $value }}</li>
        @empty
            <p>No items</p>
        @endforelse
    </ul>

    @each('default.list', $dataI, 'value')

@myDir('Hello')


    <div class="col-md-5">
        <h2>{{ $title }}</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-5">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>


</div>
