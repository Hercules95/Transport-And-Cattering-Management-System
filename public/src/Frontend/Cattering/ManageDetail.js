import React,{Component} from 'react';
import ReactDOM from 'react-dom';
import Detail from './Detail';


function run(){

ReactDOM.render(
    <Detail/>,
    document.getElementById("Detail")
);
}

const loadedStates = ['complete', 'loaded', 'interactive'];

if (loadedStates.includes(document.readyState) && document.body) {
  run();
} else {
  window.addEventListener('DOMContentLoaded', run, false);
}