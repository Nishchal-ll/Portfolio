import React, { useState, useEffect } from "react";
import { Battery, Clock, Cpu, Moon, Sun, Wifi } from "lucide-react";

const SystemTopBar = ({ isDark, onToggleTheme }) => {
  const [time, setTime] = useState(new Date());

  useEffect(() => {
    const timer = setInterval(() => setTime(new Date()), 1000);
    return () => clearInterval(timer);
  }, []);

  const formatTime = (date) =>
    date.toLocaleTimeString([], { hour: "2-digit", minute: "2-digit", second: "2-digit" });

  const formatDate = (date) =>
    date.toLocaleDateString([], { weekday: "short", month: "short", day: "numeric" });

  return (
    <div className="fixed top-0 left-0 right-0 z-50 select-none border-b border-gray-200 bg-gray-50/95 font-mono text-xs backdrop-blur dark:border-slate-700 dark:bg-slate-950/95">
      <div className="flex min-w-0 items-center justify-between gap-2 px-3 py-1.5 sm:px-4">
        <div className="flex min-w-0 items-center gap-2 text-gray-500 sm:gap-3 dark:text-slate-400">
          <span className="text-green-500 font-bold text-sm">⬡</span>
          <span className="truncate text-blue-600 font-semibold">nishchal@arch</span>
          <span className="text-gray-300 dark:text-slate-700">|</span>
          <span className="hidden sm:inline">bash 5.2.0</span>
          <span className="text-gray-300 hidden sm:inline dark:text-slate-700">|</span>
          <span className="hidden sm:inline text-green-600">● online</span>
        </div>

        <div className="flex shrink-0 items-center gap-2 text-gray-500 sm:gap-4 dark:text-slate-400">
          <div className="hidden md:flex items-center gap-1.5">
            <Cpu size={11} className="text-blue-400" />
            <span>CPU 12%</span>
          </div>
          <div className="hidden md:flex items-center gap-1.5">
            <span className="text-purple-400">▪</span>
            <span>MEM 4.2G</span>
          </div>
          <div className="hidden sm:flex items-center gap-1.5">
            <Wifi size={11} className="text-green-400" />
            <span>connected</span>
          </div>
          <div className="flex items-center gap-1.5">
            <Battery size={11} className="text-amber-400" />
            <span>87%</span>
          </div>
          <button
            type="button"
            onClick={onToggleTheme}
            className="inline-flex h-6 items-center gap-1.5 rounded-md border border-gray-200 bg-white px-2 text-[11px] font-semibold text-gray-600 transition hover:border-blue-300 hover:text-blue-600 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300 dark:hover:border-cyan-500 dark:hover:text-cyan-300"
            aria-label={isDark ? "Switch to light mode" : "Switch to dark mode"}
            title={isDark ? "Light mode" : "Dark mode"}
          >
            {isDark ? <Sun size={12} /> : <Moon size={12} />}
            <span className="hidden sm:inline">{isDark ? "light" : "dark"}</span>
          </button>
          <div className="flex items-center gap-1.5 text-gray-600 font-semibold dark:text-slate-300">
            <Clock size={12} className="text-gray-500 dark:text-slate-400" />
            <span className="hidden sm:inline">{formatDate(time)}</span>
            <span className="text-blue-500">{formatTime(time)}</span>
          </div>
        </div>
      </div>
    </div>
  );
};

export default SystemTopBar;
