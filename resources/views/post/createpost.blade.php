
<div class="container">
  
<h1>
    Create Post
</h1>


<form action="{{ url('post') }}" method="post" >@csrf

       
        <div class="form-group">
            <label for="name" >Title</label>
            <input type="text" name="title" id="name" v-model="" class="form-control" >
        </div>

        <div class="form-group">
            <label for="body" >Body</label>
            <input type="text" name="body" id="body" v-model="" class="form-control" >
        </div>

        <div class="form-group">
            
            <input type="submit" name="submit" value="SUmbit" v-model="" class="btn btn-default" >
        </div>

    </form>
  
</div>


