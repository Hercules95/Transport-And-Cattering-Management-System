import React,{Component} from 'react';
import ReactDOM from 'react-dom';
import ServiceDetail from './ServiceDetail';


function run(){

ReactDOM.render(
    <ServiceDetail/>,
    document.getElementById("Details")
);
}

const loadedStates = ['complete', 'loaded', 'interactive'];

if (loadedStates.includes(document.readyState) && document.body) {
  run();
} else {
  window.addEventListener('DOMContentLoaded', run, false);
}