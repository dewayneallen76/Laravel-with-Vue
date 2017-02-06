<!DOCTYPE html>
<html>
    <head>
        <title>LaraVue, Using Laravel and VueJS</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <tasks></tasks> 
        </div>
        
        <template id="tasks-template">
            <h1>My Tasks</h1>
            <ul class="list-group">
                <li class="list-group-item" v-for="task in list">
                    @{{ task.body }}
                    <strong @click="delete(task)">X</strong>
                </li>
            </ul>
        </template>
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.2.0/vue-resource.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
