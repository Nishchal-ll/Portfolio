import React, { useEffect, useState } from "react";
import { Routes, Route } from "react-router-dom";
import Projects from "./components/Project";
import Home from "./components/Home";
import Contact from "./components/Contact";
import Navbar from "./components/Navbar";
import SystemTopBar from "./components/SystemTopBar";

function App() {
  const [theme, setTheme] = useState(() => localStorage.getItem("theme") || "light");
  const isDark = theme === "dark";

  useEffect(() => {
    localStorage.setItem("theme", theme);
  }, [theme]);

  const toggleTheme = () => {
    setTheme((currentTheme) => (currentTheme === "dark" ? "light" : "dark"));
  };

  return (
    <div className={isDark ? "dark" : ""}>
      <SystemTopBar isDark={isDark} onToggleTheme={toggleTheme} />
      <Navbar /> {/* Navbar is separate */}
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/projects" element={<Projects />} />
        <Route path="/contact" element={<Contact />} />
      </Routes>
    </div>
  );
}

export default App;
