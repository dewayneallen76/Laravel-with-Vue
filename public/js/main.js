Vue.component('tasks', {
	template: '#tasks-template',

	data: function() {
		return {
			list: []
		};
	},

	created: function() {
		this.fetchTaskList();
	}, 

	methods: {

		fetchTaskList: function() {
			this.$http.get('api/tasks', function(tasks) {
				this.list = tasks;
			}.bind(this));
		},

		delete: function(task) {
			this.list.$remove(task);
		}
	}
});

new Vue({
	el: 'body'
});