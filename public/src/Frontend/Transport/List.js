import React,{Component} from 'react';
import ReactDOM from 'react-dom';
import Getlist from './Getlist';


function run(){

ReactDOM.render(
    <Getlist/>,
    document.getElementById("List")
);
}

const loadedStates = ['complete', 'loaded', 'interactive'];

if (loadedStates.includes(document.readyState) && document.body) {
  run();
} else {
  window.addEventListener('DOMContentLoaded', run, false);
}