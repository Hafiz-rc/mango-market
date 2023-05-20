@extends('layout.erp.app')
@section('page')

<div class="page-wrap">
<div id="app">

<form @submit.prevent="addTodo">
  <input v-model="newTodo">
  <button>Add Todo</button>
</form>

<ul>
  <li v-for="todo in todos" :key="todo.id">
    @{{ todo.id }} @{{ todo.text }}
    <button @click="removeTodo(todo)">X</button>
  </li>
</ul>
</div>
</div>

@endsection

@section("script")


<script type="module">
  //const { createApp } = Vue
  import {
    createApp
  } from 'vue'
  import Alu from './my-component.js'

  const app = createApp(Alu);
  app.mount('#app');
</script>

@endsection