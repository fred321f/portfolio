import React, { useState } from 'react';

function TodoInput({ addTodo }) {
    const [value, setValue] = useState('');

    const handleSubmit = (e) => { // Add new todo
        e.preventDefault(); // Prevent page from refreshing on form submit
        if (!value) return; // If value is empty, do nothing
        addTodo({
            text: value,
            isCompleted: false, // isCompleted is defined in App.jsx
        });
        setValue(''); // Reset input field
    };

    return (
        <form onSubmit={handleSubmit}>
            <input
                type="text"
                value={value}
                onChange={(e) => setValue(e.target.value)}
                placeholder="Add a new todo"
            />
            <button type="submit">Add</button>
        </form>
    );
}

export default TodoInput;