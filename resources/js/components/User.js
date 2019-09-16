import React from 'react'
import ReactDom from 'react-dom'
import axios from 'axios'

export default class User extends React.Component {


    render() {
        return (
            <div>Test</div>
        )
    }
}
var rootElement = document.getElementById('user');
if (rootElement) {
    ReactDom.render(<User customattr={rootElement.getAttribute('data-custom')} />, rootElement);
}
