<!DOCTYPE html>
<html lang="en">

<head>
    <title>How To Download PDF File Using AJAX In Laravel 10</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
    h2 {
        text-align: center;
        font-size: 22px;
        margin-bottom: 50px;
    }

    body {
        background: #fff;
    }

    .section {
        margin-top: 30px;
        background: #fff;
    }

    .pdf-btn {
        margin-top: 30px;
    }
</style>

<body>
    <div class="container">
        {{-- <div class="col-md-8 section offset-md-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>How To Download PDF File Using AJAX In Laravel 9 - Techsolutionstuff</h2>
                    </div>
                    <div class="panel-body">
                        <div class="main-div">
                            <h3>What is Lorem Ipsum?</h3>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>
                            <h3>Where does it come from?</h3>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.                               
                        </div>
                    </div>
                </div>
            </div> --}}
           
        <div class="row">
            <div>
                <img src="https://static.vecteezy.com/system/resources/previews/020/442/777/original/pns-letter-logo-design-on-white-background-pns-creative-circle-letter-logo-concept-pns-letter-design-vector.jpg" width="100" height="100" alt="">
            </div>
            <div class="col-lg-10 mx-auto">
                <div class="card mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                </tr>
                            </thead>
                            <tbody>
                               @if($posts)
                               @foreach ($posts as $key => $post )
                               <tr>
                                   <td>{{ $key+1 }}</td>
                                   <td>{{ $post->title }}</td>
                                   <td>{{ $post->content }}</td>
                               </tr>
                                @endforeach
                                @else
  
                                <tr>
                                    <td colspan="3">
                                        <p class="text-muted">No record!</p>
                                    </td>
                                </tr>
                               @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
