<template>
  <div>
    <div>
      <div class="alert alert-secondary" role="alert" v-for="(task, index) in tasks" :key="task.id">
        {{index}}. {{task.title}}
        <a @click="removeTask(task)">
          <span class="badge badge-danger float-right">X</span>
        </a>
      </div>
    </div>
    <div class="rounded border border-primary p-3">
      <div class="form-group">
        <input
          class="form-control"
          v-model="newTask"
          type="text"
          placeholder="Whats your next task?"
        />
      </div>
      <button @click="addTask" class="btn btn-primary">Submit</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "app",
  prop: ["tasks"],
  data() {
    return {
      newTask: "",
      tasks: [{ title: "Task1" }, { title: "Task2" }, { title: "Task3" }]
    };
  },

  methods: {
    addTask() {
      this.tasks.push({ title: this.newTask });
      this.newTask = "";
    },
    removeTask(id) {
      this.tasks.splice(this.tasks.indexOf(id), 1);
    }
  }
};
</script>
