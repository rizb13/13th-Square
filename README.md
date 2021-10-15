# 13th-Square
IT491 Capstone Project

Objective:
The goal of this project is to provide a database and website for the sponsor to be able to sublet books and ISBN numbers to the public while also allowing sales of his books and other features such as author signings.

Narrative:
Project asks students to develop a website hosted locally initially, to incorporate features such as Login/ ID system, listing books, and books for sale provided by their URL to other vendor sites. Further features may include a shopping cart, as well as an author review section and a pleasing graphical user interface. The website should provide the user with necessary information for browsing books and provide necessary interaction with the database that holds the information 

Risks:
Some of the risks of the project include the duration of the semester, as well as well being of the group. Another possible risk includes any possible technical failures, for example computer malfunctions or problems in the software. 

Dependencies:
-	Socket I/O will be used to connect the server to the front end.
-	Javascript as well as Python react will be the main languages used for the backend of the project.
-	CSS/HTML used for the frontend portion of the project.

Boundaries: (In Scope / Out of Scope)
●	List features select books by the Author Will G. Louden (and maybe others later).
●	List/feature books that are for sale and where they can be purchased
●	Author speaking / signing requests if contact information available. 
●	Pleasing graphical interfaces 
●	User ID system (for security / roles)
●	Search and review books Previous readers review section 
●	Book covers and descriptions
●	Place for author videoed descriptions.

What requirements are considered part of the next phase, the work of other teams or not included in what is expected for this team to do?
●	Sql injection protection
●	Maybe online shopping cart; place for bulk purchases (maybe);

INSTALLATION REQUIREMENTS:
Install:
Download Node.js version 10.13 or later @ https://nodejs.org/en/

Verify node and npm installed correctly, open command prompt and enter:
- `node -v`
- `npm -v`

If not working on a Windows machine and get a `node is not recognized as a ...`: 
- Open the command prompt and type in:
`SET PATH=C:\Program Files\Nodejs;%PATH%`
 (Answer found @ https://stackoverflow.com/questions/23412938/node-is-not-recognized-as-an-internal-or-an-external-command-operable-program)

Once working in command prompt, now check if Node.js works in IDE: (may have to restart IDE)
- `node -v`
- `npm -v`

May need to download a `Remote WSL` extention in your IDE. It was automatic for me when clicked link @: https://code.visualstudio.com/docs/nodejs/nodejs-tutorial.  If not look up how to install extentions on IDE.

THE FOLLOWING INSTRUCTIONS ARE ALSO @ https://nextjs.org/learn/basics/create-nextjs-app/setup

To create a Next.js app, open your terminal, cd into the directory you’d like to create the app in, and run the following command:
`npx create-next-app nextjs-blog --use-npm --example "https://github.com/vercel/next-learn/tree/master/basics/learn-starter" `

