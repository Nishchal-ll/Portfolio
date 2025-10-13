import React from "react";
import { Routes, Route } from "react-router-dom";
import Projects from "./components/Project";
import Home from "./components/Home";
import Contact from "./components/Contact";
import Navbar from "./components/Navbar";

function App() {
  return (
    <>
      <Navbar /> {/* Navbar is separate */}
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/projects" element={<Projects />} />
        <Route path="/contact" element={<Contact />} />
      </Routes>
    </>
  );
}

export default App;
