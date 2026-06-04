import React from "react";
import { Github, Terminal, FolderOpen } from "lucide-react";
import { Helmet } from "react-helmet";
import LinuxBackdrop from "./LinuxBackdrop";

const Projects = () => {
  const projects = [
    {
      id: 1,
      title: "Shift Management System",
      description: "A Java Swing application for managing shift schedules and employee assignments with a user-friendly interface.",
      technologies: ["Golang", "PostgreSQL", "Docker"],
      githubLink: "https://github.com/Nishchal-ll/Shift-Management-System.git",
    },
    {
      id: 2,
      title: "AutoTweet",
      description: "A Next.js project demonstrating automated tweeting functionality using the Twitter API, allowing users to schedule and post tweets programmatically.",
      technologies: ["Next.js", "Twitter API", "Hugging Face API"],
      githubLink: "https://github.com/Nishchal-ll/AutoTweet.git",
    },
    {
      id: 3,
      title: "Mini-Motors",
      description: "An ecommerce application for Hot Wheels cars built with Laravel, featuring product browsing, cart functionality, and Stripe checkout integration.",
      technologies: ["Laravel", "Khalti", "MySQL"],
      githubLink: "https://github.com/Nishchal-ll/Minimotors-FullStack-Project.git",
    },
    {
      id: 4,
      title: "Celtic Trekking",
      description: "A full-stack web application for a trekking company, built with Laravel and Filament, allowing users to browse trekking packages, make bookings, and manage their reservations through an admin dashboard.",
      technologies: ["Laravel", "Filament", "MySQL"],
      githubLink: "https://github.com/Nishchal-ll/Celtic-Trekking.git",
    },
    {
      id: 5,
      title: "Honorific Aware English to Nepali Translation System",
      description: "A responsive website for translating English text to Nepali, built with modern web technologies and a user-friendly interface.",
      technologies: ["Python", "Flask", "HTML", "CSS"],
      githubLink: "https://github.com/Nishchal-ll/Machine-Translation.git",
    },
    {
      id: 6,
      title: "Kanban Board",
      description: "A simple Kanban board application built with Node.js, Express, and MongoDB, allowing users to create, manage, and organize tasks in a visual workflow.",
      technologies: ["Node.js", "Express", "MongoDB"],
      githubLink: "https://github.com/Nishchal-ll/Kanban-Board.git",
    },
  ];

  return (
    <>
      <Helmet>
        <title>Projects | Nishchal Acharya</title>
        <meta name="description" content="Browse the latest web projects by Nishchal Acharya." />
        <meta name="keywords" content="Nishchal Acharya projects,Golang, Laravel, React.js, Fullstack" />
      </Helmet>

      <div className="relative min-h-screen overflow-hidden transition-all duration-500">
        <LinuxBackdrop />
        <div className="relative z-10 mx-auto max-w-7xl px-4 pb-20 pt-36 sm:px-6 lg:px-8">

          {/* ── Page Terminal Header ── */}
          <div className="max-w-6xl mx-auto mb-10">
            <div className="overflow-hidden rounded-xl border border-gray-200 bg-white/95 shadow-lg shadow-gray-100/80 backdrop-blur dark:border-slate-700 dark:bg-slate-900/95 dark:shadow-black/30">

              {/* Window bar */}
              <div className="flex items-center justify-between border-b border-gray-200 bg-gray-100 px-4 py-2.5 select-none dark:border-slate-700 dark:bg-slate-800">
                <div className="flex items-center gap-2">
                  <div className="w-3 h-3 rounded-full bg-red-500" />
                  <div className="w-3 h-3 rounded-full bg-yellow-400" />
                  <div className="w-3 h-3 rounded-full bg-green-500" />
                </div>
                <div className="flex items-center gap-1.5 text-xs text-gray-500 font-mono dark:text-slate-400">
                  <Terminal size={11} />
                  <span>_&gt; bash - 80x24</span>
                </div>
                <div className="text-xs text-gray-400 font-mono hidden sm:block dark:text-slate-500">pts/1</div>
              </div>

              {/* Terminal body */}
              <div className="bg-white/95 px-4 py-5 font-mono sm:px-6 dark:bg-slate-900/95">
                <div className="mb-3 break-words text-xs sm:text-sm">
                  <span className="text-blue-600 font-semibold">root@nishchal</span>
                  <span className="text-gray-400 dark:text-slate-500">:</span>
                  <span className="text-gray-700 dark:text-slate-300">~/projects</span>
                  <span className="text-gray-700 dark:text-slate-300">$ ls -la ./repos</span>
                  <span className="inline-block w-2 h-[14px] bg-gray-700 align-middle animate-pulse ml-1 dark:bg-cyan-200" />
                </div>
                <div className="space-y-0.5 text-xs text-gray-500 dark:text-slate-400">
                  <p><span className="text-green-600 dark:text-emerald-300">drwxr-xr-x</span> &nbsp;nishchal &nbsp;projects/ &nbsp;<span className="text-amber-500 dark:text-amber-300">// {projects.length} repositories found</span></p>
                  <p><span className="text-blue-400 dark:text-cyan-300">&gt;</span> Listing all public repositories...</p>
                </div>
              </div>
            </div>
          </div>

          {/* ── Project Cards Grid ── */}
          <div className="mx-auto grid max-w-6xl gap-5 sm:grid-cols-2 lg:grid-cols-3">
            {projects.map((project, index) => (
              <div
                key={project.id}
                className="overflow-hidden rounded-xl border border-gray-200 bg-white/95 font-mono shadow-md backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:shadow-xl dark:border-slate-700 dark:bg-slate-900/95 dark:shadow-black/20"
                style={{ animation: `fadeInUp 0.6s ease-out ${index * 0.08}s both` }}
              >
                {/* Card window bar */}
                <div className="flex items-center justify-between border-b border-gray-200 bg-gray-50 px-3 py-2 select-none dark:border-slate-700 dark:bg-slate-800">
                  <div className="flex items-center gap-1.5">
                    <div className="w-2.5 h-2.5 rounded-full bg-red-400" />
                    <div className="w-2.5 h-2.5 rounded-full bg-yellow-300" />
                    <div className="w-2.5 h-2.5 rounded-full bg-green-400" />
                  </div>
                  <div className="flex items-center gap-1 text-xs text-gray-400 dark:text-slate-500">
                    <FolderOpen size={10} />
                    <span>repo_{project.id}.sh</span>
                  </div>
                </div>

                {/* Card body */}
                <div className="p-4 space-y-3">
                  {/* Prompt + title */}
                  <div>
                    <p className="mb-1 text-xs text-gray-400 dark:text-slate-500">
                      <span className="text-blue-500 dark:text-cyan-300">$</span> cat README.md
                    </p>
                    <h3 className="text-sm font-bold leading-snug text-gray-900 dark:text-slate-50">
                      {project.title}
                    </h3>
                  </div>

                  {/* Description */}
                  <p className="line-clamp-3 border-l-2 border-gray-200 pl-2 text-xs leading-relaxed text-gray-500 dark:border-slate-700 dark:text-slate-300">
                    {project.description}
                  </p>

                  {/* Tech tags */}
                  <div>
                    <p className="mb-1.5 text-xs text-gray-400 dark:text-slate-500">
                      <span className="text-blue-500 dark:text-cyan-300">$</span> cat package.json | grep tech
                    </p>
                    <div className="flex flex-wrap gap-1.5">
                      {project.technologies.map((tech, idx) => (
                        <span
                          key={idx}
                          className="rounded border border-blue-100 bg-blue-50 px-2 py-0.5 text-xs font-medium text-blue-600 dark:border-cyan-500/20 dark:bg-cyan-400/10 dark:text-cyan-200"
                        >
                          {tech}
                        </span>
                      ))}
                    </div>
                  </div>

                  {/* GitHub link */}
                  <a
                    href={project.githubLink}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="group mt-1 flex w-full items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white px-3 py-2 text-xs font-semibold text-gray-700 transition-all duration-200 hover:border-gray-500 hover:bg-gray-50 hover:text-gray-900 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-300 dark:hover:border-cyan-500 dark:hover:bg-slate-800 dark:hover:text-cyan-200"
                  >
                    <Github size={13} />
                    <span>git clone repo</span>
                  </a>
                </div>
              </div>
            ))}
          </div>

        </div>

        <style>{`
          @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
          }
          .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
          }
        `}</style>
      </div>
    </>
  );
};

export default Projects;
