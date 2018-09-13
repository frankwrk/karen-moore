# Wordpress Theme Boilerplate
*A repository best practices associated with wordpress theme development. Using this repo as a baseline when creating a new theme will ensure accuracy and consistency amongst all project. Please continue to edit and improve to keep with new trends and more streamlined workflows.*

---
## To Begin
1. clone repository and change name to theme name.
2. Update the style.css file with correct theme information
3. npm install
4. Once theme is set up within the structure of a wordpress install, run **gulp** to start minifications and browsersync
    * proxy set to localhost:81, with browsersync on localhost:3000. Change depending on local mamp setup.
    * must update gulpfile.js browsersync with name of theme.

## Grid Systems
No grid system is built into this repository. If you would like to use one, please add it after cloning the repository. This repository does include tachyons which can be used as a the grid system.

* Bootstrap, Foundation, Gridlex, Bulma, Skeleton are all perfectly suitable per Levelwing standards.
    * Whatever you are comfortable using and is within standard front end best practices.
* If using bower components or npm to install grid system or other packages, please move to the **dependencies** folder as bower components and npm folders should be in a .gitignore file.
