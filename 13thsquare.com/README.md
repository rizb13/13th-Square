
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

# INSTALLATION REQUIREMENTS:

## Install Node JS:
Download Node.js version 10.13 or later @ https://nodejs.org/en/

### Verify node and npm installed correctly, open command prompt and enter:
- `node -v`
- `npm -v`

### If not working on a Windows machine and get a `node is not recognized as a ...`: 
- Open the command prompt and type in:
`SET PATH=C:\Program Files\Nodejs;%PATH%`
 (Answer found @ https://stackoverflow.com/questions/23412938/node-is-not-recognized-as-an-internal-or-an-external-command-operable-program)

### Once working in command prompt, now check if Node.js works in IDE: (may have to restart IDE)
- `node -v`
- `npm -v`

May need to download a `Remote WSL` extention in your IDE. It was automatic for me when clicked link @: https://code.visualstudio.com/docs/nodejs/nodejs-tutorial.  If not look up how to install extentions on IDE.

## THE FOLLOWING INSTRUCTIONS ARE ALSO @ https://nextjs.org/learn/basics/create-nextjs-app/setup

To create a Next.js app, open your terminal, cd into the directory you’d like to create the app in, and run the following command:
`npx create-next-app nextjs-blog --use-npm --example "https://github.com/vercel/next-learn/tree/master/basics/learn-starter" `

## Install Git for Windows
### Follow instruction @ https://www.jcchouinard.com/install-git-in-vscode/

Check if Git is already on system: `git --version`
If not, download @ https://git-scm.com/downloads/

Check in command line if git is installed: `git --version`

In your IDE, go to `File` > `Preferences`. Then `Settings`. Type `Git: Enabled` and make sure that the `Git: Enabled` box is ticked

Now check in IDE if git is installed: `git --version` (may have to restart IDE)

### Once git is properly installed on your IDE, get your git credentials and type the following:
- `git config --global user.name "yourusername"`
- `git config --global user.email "email@youremail.com"`

### To clone a remote repository: 
- Open new window, one of the options on Welcome page should say `Clone git repository`, click it
- Then sign into Git account
- Copy and paste repository url in search bar, where it tells you to
- Select folder to store repository in

## Useful Git  snippits

Clone repository: `git clone <https://url-of-the-repository>` 

### Add files to remote repository:
- `git add <file_name>`
- or `git add .` for all files

### Commit files to remote repository:
	- `git commit -a` commits all files
	- `git commit -m "commit message"`, VS has different way to send commit message

### Find files that were changed from previous commit:
- `git status`

### Grab and sync changes from github.com:
- `git pull origin <branch_name>`

### Push changes to github.com:
- `git push origin <branch_name>`



### Branches:
- Create Branch: `git branch <branch_name>`
- List branches: `git branch -a`
- Move to branch: `git checkout <branch_name>`
- Delete a local branch: `git branch -d <branch_name>`


This is a [Next.js](https://nextjs.org/) project bootstrapped with [`create-next-app`](https://github.com/vercel/next.js/tree/canary/packages/create-next-app).

## Getting Started

First, run the development server:

```bash
npm run dev
# or
yarn dev
```

Open [http://localhost:3000](http://localhost:3000) with your browser to see the result.

You can start editing the page by modifying `pages/index.js`. The page auto-updates as you edit the file.

[API routes](https://nextjs.org/docs/api-routes/introduction) can be accessed on [http://localhost:3000/api/hello](http://localhost:3000/api/hello). This endpoint can be edited in `pages/api/hello.js`.

The `pages/api` directory is mapped to `/api/*`. Files in this directory are treated as [API routes](https://nextjs.org/docs/api-routes/introduction) instead of React pages.

## Learn More

To learn more about Next.js, take a look at the following resources:

- [Next.js Documentation](https://nextjs.org/docs) - learn about Next.js features and API.
- [Learn Next.js](https://nextjs.org/learn) - an interactive Next.js tutorial.

You can check out [the Next.js GitHub repository](https://github.com/vercel/next.js/) - your feedback and contributions are welcome!

## Deploy on Vercel

The easiest way to deploy your Next.js app is to use the [Vercel Platform](https://vercel.com/new?utm_medium=default-template&filter=next.js&utm_source=create-next-app&utm_campaign=create-next-app-readme) from the creators of Next.js.

Check out our [Next.js deployment documentation](https://nextjs.org/docs/deployment) for more details.


# To run Application

Do:
- `npx run dev` in terminal within the 13thsquare.com directory
- open http://localhost:3000 in browser