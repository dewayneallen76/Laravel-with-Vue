<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            
            
            <tasks list=""></tasks> 
        </div>
        
        <template id="tasks-template">
            <h1>My Tasks</h1>
            <ul class="list-group">
                @foreach($tasks as $task)
                    <li class="list-group-item">
                        {{ $task->body }}
                    </li>
                @endforeach
            </ul>
        </template>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
