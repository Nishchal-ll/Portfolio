import React, { useEffect, useState } from "react";
import { Binary, Braces, Code2, Cpu, HardDrive, Shell, Terminal } from "lucide-react";

const floatingItems = [
  { icon: Terminal, label: "bash", className: "left-[8%] top-[19%]", depth: 24 },
  { icon: Cpu, label: "htop", className: "right-[10%] top-[24%]", depth: -18 },
  { icon: HardDrive, label: "/dev/sda", className: "left-[12%] bottom-[18%]", depth: -14 },
  { icon: Shell, label: "zsh", className: "right-[16%] bottom-[22%]", depth: 20 },
  { icon: Binary, label: "0101", className: "left-[48%] top-[12%]", depth: 12 },
  { icon: Braces, label: "config", className: "right-[34%] bottom-[11%]", depth: -10 },
  { icon: Code2, label: "vim", className: "left-[34%] bottom-[34%]", depth: 16 },
];

const LinuxBackdrop = () => {
  const [pointer, setPointer] = useState({ x: 0, y: 0 });

  useEffect(() => {
    const handlePointerMove = (event) => {
      const x = (event.clientX / window.innerWidth - 0.5) * 2;
      const y = (event.clientY / window.innerHeight - 0.5) * 2;
      setPointer({ x, y });
    };

    window.addEventListener("pointermove", handlePointerMove);
    return () => window.removeEventListener("pointermove", handlePointerMove);
  }, []);

  return (
    <div className="pointer-events-none fixed inset-0 z-0 overflow-hidden bg-[radial-gradient(circle_at_top_left,rgba(34,197,94,0.08),transparent_30%),linear-gradient(180deg,#f8fafc_0%,#ffffff_42%,#f1f5f9_100%)] dark:bg-[radial-gradient(circle_at_top_left,rgba(34,211,238,0.12),transparent_30%),linear-gradient(180deg,#020617_0%,#0f172a_48%,#020617_100%)]">
      <div className="absolute inset-0 opacity-[0.16] [background-image:linear-gradient(rgba(15,23,42,0.12)_1px,transparent_1px),linear-gradient(90deg,rgba(15,23,42,0.12)_1px,transparent_1px)] [background-size:28px_28px] dark:opacity-[0.18] dark:[background-image:linear-gradient(rgba(148,163,184,0.16)_1px,transparent_1px),linear-gradient(90deg,rgba(148,163,184,0.16)_1px,transparent_1px)]" />
      <div className="absolute left-[-8rem] top-24 h-72 w-72 rounded-full bg-lime-300/20 blur-3xl dark:bg-cyan-400/10" />
      <div className="absolute right-[-7rem] bottom-8 h-80 w-80 rounded-full bg-cyan-300/20 blur-3xl dark:bg-blue-500/10" />

      {floatingItems.map(({ icon, label, className, depth }) => (
        <div
          key={label}
          className={`absolute hidden sm:flex items-center gap-2 rounded-md border border-slate-300/60 bg-white/55 px-3 py-2 font-mono text-xs text-slate-500 shadow-sm backdrop-blur dark:border-cyan-400/20 dark:bg-slate-900/55 dark:text-slate-300 ${className}`}
          style={{
            transform: `translate3d(${pointer.x * depth}px, ${pointer.y * depth}px, 0)`,
            transition: "transform 140ms ease-out",
          }}
        >
          {React.createElement(icon, { size: 15, className: "text-blue-500 dark:text-cyan-300" })}
          <span>{label}</span>
        </div>
      ))}

      <div
        className="absolute left-1/2 top-1/2 hidden -translate-x-1/2 -translate-y-1/2 font-mono text-[12rem] font-black leading-none text-slate-900/[0.025] md:block dark:text-cyan-200/[0.035]"
        style={{
          transform: `translate3d(calc(-50% + ${pointer.x * -8}px), calc(-50% + ${pointer.y * -8}px), 0)`,
          transition: "transform 180ms ease-out",
        }}
      >
        $
      </div>
    </div>
  );
};

export default LinuxBackdrop;
