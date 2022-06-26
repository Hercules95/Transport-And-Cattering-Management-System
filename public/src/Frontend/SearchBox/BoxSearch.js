import React,{Component} from 'react';
import ReactDOM from 'react-dom';
import Search from './Search';


function run(){

ReactDOM.render(
    <Search/>,
    document.getElementById("Search")
);
}

const loadedStates = ['complete', 'loaded', 'interactive'];

if (loadedStates.includes(document.readyState) && document.body) {
  run();
} else {
  window.addEventListener('DOMContentLoaded', run, false);
}