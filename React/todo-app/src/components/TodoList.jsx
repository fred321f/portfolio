import React from 'react';
import TodoItem from './TodoItem';

function TodoList({ todos, completeTodo, removeTodo }) {
  return (
    <div>
      {todos.map((todo, index) => ( // Fetch todos from App.jsx and map through them
        <TodoItem // Pass todo, index, completeTodo, and removeTodo props to TodoItem component from TodoList component
          key={index}
          index={index}
          todo={todo}
          completeTodo={completeTodo}
          removeTodo={removeTodo}
        />
      ))}
    </div>
  );
}

export default TodoList;