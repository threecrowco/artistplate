import React from 'react'
import ReactDom from 'react-dom'

export default class User extends React.Component {
    render() {
        return (
            <div>
                <h1 className="font-bold text-xl tracking-tight">I am a user!</h1>
                <button className="py-2 px-3 font-bold text-white bg-black hover:bg-red-500 rounded" onClick={ () => alert('You clicked!')}>Click me</button>
            </div>
        )
    }
}

if (document.getElementById('user')) {
    ReactDom.render(<User />, document.getElementById('user'));
}
