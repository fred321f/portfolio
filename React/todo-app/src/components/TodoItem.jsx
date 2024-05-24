/*

In this file, we will create a functional component called TodoItem. This component will take three props: todo, index, completeTodo, and removeTodo. The todo prop will be an object that contains the text and isCompleted properties. The index prop will be the index of the todo item in the todos array. The completeTodo and removeTodo props will be functions that will be called when the user clicks the Complete and Remove buttons, respectively.

*/

import React from 'react';

function TodoItem({ todo, index, completeTodo, removeTodo }) { // Add todo, index, completeTodo, and removeTodo props that will be passed from TodoList component when rendering TodoItem component in TodoList
    return (
      <div className="todo-item">
        <p className={todo.isCompleted ? 'completed' : ''}>{todo.text}</p>
        <button onClick={() => completeTodo(index)}>Complete</button>
        <button onClick={() => removeTodo(index)}>Remove</button>
      </div>
    );
  }

export default TodoItem;