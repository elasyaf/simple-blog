<!DOCTYPE html>
<html>
    <head>
        <title>Simple Blog</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/starter-template.css')}}" >
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">My Blog</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Write Posts</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <div class="col-md-6">
                <h2>Create New Post</h2>
                <form method="post" action="{{route('posts.save')}}">
                    <div class="form-group">
                        <label for="inputTitle" class="control-label">Title</label>
                        <input type="text" name="title" id="inputTitle" placeholder="Post Title" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="inputCategory" class="control-label">Category</label>
                        <select name="category_id" class="form-control" id="inputCategory">
                            <option value="1">Uncategorized</option>
                            <option value="2">My Category</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputContent" class="control-label">Content</label>
                        <textarea name="content" id="inputContent" class="form-control" rows="15">sss</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>

        </div><!-- /.container -->
        <script type="text/javascript" src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
