<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Send Email to Multiple Users - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

<div class="container">
    <h1>Laravel Send Email to Multiple Users - ItSolutionStuff.com</h1>

    <button type="submit" class="btn btn-success send-email">Send Email</button>

    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>id</th>
                <th>ad soyad</th>
                <th>e mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($musteriler as $musteri)
                <tr>
                    <td>{{ $musteri->id }}</td>
                    <td>{{ $musteri->adsoyad }}</td>
                    <td>{{ $musteri->mail }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $musteriler->links() }}
</div>

<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".send-email").click(function(){



            var ids = $.map($(), function(c){return c.value; });

            $.ajax({
               type:'POST',
               url:"{{ route('ajax.send.email') }}",
               data:{ids:ids},
               success:function(data){
                  alert(data.success);
               }
            });


        console.log(selectRowsCount);
    });

</script>

</body>
</html>
