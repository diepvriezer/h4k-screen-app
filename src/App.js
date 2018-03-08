import React, { Component } from "react";
import logo from "./logo.svg";
import OverlayLogo from "./Logo";
import "./App.css";

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
        <p className="App-intro">
          To get started, edit :::D <code>src/App.js</code> and save to reload.
        </p>
				<p>
					<OverlayLogo text="Roeivierkamp 2018" />
				</p>
      </div>
    );
  }
}

export default App;
