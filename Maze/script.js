//below are maze levels 1 through 10
let maze1 = [
    `###########`,
    `#_.......##`,
    `##..###..##`,
    `##....#..##`,
    `##..###..##`,
    `##..###..##`,
    `##..###..##`,
    `##..###..##`,
    `##....#..!#`,
    `###########`,
    'LEVEL 1    '
];
let maze2 = [
    `################`,
    `#_.........#####`,
    `##..#..##..#####`,
    `##..#..##......#`,
    `##..#..######..#`,
    `##..#..######..#`,
    `##..#..##......#`,
    `##..#..#########`,
    `##..#..........#`,
    `##..#######..###`,
    `##..#######..###`,
    `##...........###`,
    `##..########.###`,
    `##............!#`,
    `################`,
    'LEVEL 2         '
];
let maze3 = [
    `###############################`,
    `#_.....................########`,
    `###########..########..########`,
    `###########..#......#.........#`,
    `##...........#..##..########..#`,
    `##..#######..#..##..########..#`,
    `##..#....##..#..##..####......#`,
    `##..###..#####..##.....########`,
    `##...............####........!#`,
    `###############################`,
    'LEVEL 3                        '
];
let maze4 = [
    `###############################`,
    `#_....###..........#........###`,
    `####..###..###..####..####..###`,
    `####.......###..#.....####..###`,
    `##############..####..#.......#`,
    `##..............####..#..###..#`,
    `##..################..#..###..#`,
    `##..##........######..#....#..#`,
    `##..##..####..#.......######..#`,
    `##......####..#..###.......#..#`,
    `############..#..###########..#`,
    `##............#..#.......##...#`,
    `##..###########..#..###..##..##`,
    `##..................###..#...!#`,
    `###############################`,
    'LEVEL 4                        '
];
let maze5 = [
    `###############################`,
    `#_..........####.............##`,
    `##..############..#########..##`,
    `##.............#..#.....###..##`,
    `##..#########..#..#..#..###..##`,
    `##..##..#####..#..#..#..###..##`,
    `##..#.....###..#..#..#..###..##`,
    `##..####..###.....#..#.......##`,
    `##..####..#########..##########`,
    `##..####..........#.......#####`,
    `##..####..######..######..#####`,
    `##..#.....######.....#........#`,
    `##..#..#..#########..#######..#`,
    `##.....#.......#####.......#.!#`,
    `###############################`,
    'LEVEL 5                        '
];
let maze6 = [
    `###############################`,
    `#_......####.........#........#`,
    `##..##..#.....#####..#..####..#`,
    `##......#..#..#......#..#.....#`,
    `######..####..#####..#..#######`,
    `##......#..#..##..#...........#`,
    `#...##........#..##..#..#######`,
    `##..#..##..#####..####..#.....#`,
    `##..#####..#...#..#.....#..#..#`,
    `##.........##..#..#..####..#..#`,
    `######..#......#..#..####..#..#`,
    `##......#..#####..#........####`,
    `##..##..#.....#####..##..###..#`,
    `##..##..###..##########..#....#`,
    `##..##..#................###..#`,
    `##..##..###############..###..#`,
    `##..##..#..##..##..#########..#`,
    `##..#........................!#`,
    `###############################`,
    'LEVEL 6                        '
];
let maze7 = [
    `###############################`,
    `#_........##..#######..##..#..#`,
    `##..####..##......#...........#`,
    `##....##..##..##..#..##..###..#`,
    `##....##......##..#..#####....#`,
    `##..####..####.......#..##..###`,
    `#####..####..##..#####..##..###`,
    `##........#..##..#...#..##....#`,
    `##..#######..######..#..####..#`,
    `##..#........##...#..####.....#`,
    `##..#..##..####..##..#.....#..#`,
    `##..#..#####..#......####..####`,
    `##..#..#...........###..#..#..#`,
    `##.....#..###..#..##.......#..#`,
    `########..#....#..##..###..#..#`,
    `##........###..#.......#...#..#`,
    `##..########################..#`,
    `##...........................!#`,
    `###############################`,
    'LEVEL 7                        '
];
let maze8 = [
    `#########################################`,
    `#_......................#...............#`,
    `##..#################...#...#########...#`,
    `##..#.......#.......#...#...#.......#...#`,
    `##..#...#...#...#...#...#...#...#..##...#`,
    `##..#...#.......#...........#...#...#...#`,
    `##..#########...#############...#...#...#`,
    `##..........#...............#...#...#...#`,
    `######################..#...#...#...#...#`,
    `##......................#...#...#.......#`,
    `##..#################...#...#...#########`,
    `##..#...............#...#...#...........#`,
    `##..#############...#...#...#####...#...#`,
    `##......#.......#.......#.......#...#...#`,
    `##..#...#...#...#...#########...#####...#`,
    `##..#.......#...#...........#.......#...#`,
    `#############...#################...#...#`,
    `##..............#.......#.......#...#...#`,
    `##..#############...#...#...#...#####...#`,
    `##..................#.......#..........!#`,
    `#########################################`,
    'LEVEL 8                                  '
];
let maze9 = [
    `##########################################`,
    `#_.......................#...............#`,
    `######################...#...#############`,
    `##...#.......#.......#...#...#...........#`,
    `##...#...#...#...#...#...#...#...#####...#`,
    `##.......#.......#.......#.......#...#...#`,
    `##...#########...#############...#...#####`,
    `##...........................#.......#...#`,
    `########..#####..#########...#...#...#...#`,
    `##..........#............#...#...#.......#`,
    `##...#####..##########...#...#...#########`,
    `##...#...............#.......#...........#`,
    `##...#############...#...#...#####...#...#`,
    `##...#....#......#.......#.......#...#...#`,
    `##...###..#..#....#...#########...#####..#`,
    `##..........#....#...........#.......#...#`,
    `#########..####...####..###########...#..#`,
    `##...............#.......#.......#.......#`,
    `##...#############...#...#...#...#####...#`,
    `##...................#.......#..........!#`,
    `##########################################`,
    'LEVEL 9                                   '
];
let maze10 = [
    `##############################################################`,
    `#_.......######.............##............#..................#`,
    `#######..##......#..######......#####..#..#########..######..#`,
    `##....#..#########..##..######..#..##..#..................#..#`,
    `####.....##.........##.................#..#################..#`,
    `##....#######...######..########..######..#...............#..#`,
    `####.......#######..##..##.....#..#..###..#..#################`,
    `#########..#.........#..##..#..###........#..#...........##..#`,
    `##......#..#..#..#####..##..#..#....#######..#..#..#..#..##..#`,
    `##..#####..#..#.........##..#..###..#.....#..#..#..#..#......#`,
    `##.........#..#..#..######..#..###..####..####..#..#..#..#####`,
    `#########..####..#####..#####....#..............#..####..#...#`,
    `###.....#........#.............##################........##..#`,
    `###..#..#..#######..#..#..######...................####...#..#`,
    `######..####..####..#..#..##..##..##################..#..##..#`,
    `####..........#.....#..#..##..............................#..#`,
    `##....######..####..#..#..##..#############################..#`,
    `####..#..###.....#..#..#..##..#..............##..............#`,
    `##.#..#.......####..#..#..##..###..####..#..#..#..#####..#####`,
    `##.#..######..#..#..#..#..##..#....#..#..#..#..#..#..#####..##`,
    `##.#.......#........#..#####....#..#..#..#..................##`,
    `##.######..##..######.........###..#.....################..###`,
    `##......#..#####..#####..##############..#..........#####..###`,
    `##..#####.............####...............###..#######........#`,
    `##..#......#########..#..#..################..#........#..#..#`,
    `##..#..##..##.........#..#..#..............#######..####..#..#`,
    `##..#####..#########..#..#..#..#..#..####..#..............#..#`,
    `##................##.....#..#..#..####..#..#..###..#..##..#..#`,
    `#########..#####..########..#..#........#..#..#..###..##..#..#`,
    `##.............#...............##########.....#........#....!#`,
    `##############################################################`,
    'LEVEL 10                                                      '
];
let currentLevel = maze1;
let nextLevel = 0;
let score = 0;
let levels = [maze1, maze2, maze3, maze4, maze5, maze6, maze7, maze8, maze9, maze10];
let minmoves = [42, 73, 173, 332, 217, 138, 318, 401, 216, ''];
let body = document.querySelector('body');
let divTable = document.getElementById('cover');
let tableEl = document.querySelector('table');
//if button clicked it loads this function for info on keys
let info = () => {
    let b1 = document.querySelector('#one')
    b1.textContent = 'WASD to move and press me to play';
};
let nl = () => {
    let b1 = document.querySelector('#one');
    nextLevel = (nextLevel + 1) % 10;
    b1.textContent = 'Play Level ' + (nextLevel + 1);
    if (nextLevel > 4)
        alert("Zoom out accordingly to play Level " + (nextLevel + 1));
};
//if button clicked it loads the game
let loadPage = () => {
    let getRideOfMenu = () => {
        let b1 = document.querySelector('#one');
        let b2 = document.querySelector('#two');
        let b3 = document.querySelector('#three');
        b1.style.display = 'none';
        b2.style.display = 'none';
        b3.style.display = 'none';
        body.style.flexDirection = 'row';
        body.style.justifyContent = 'flex-start';
        body.style.alignItems = 'flex-start';
    };
    getRideOfMenu();
    let won = () => {
        //needed variables for win condition
        let winP = document.createElement('section');
        let h1 = document.createElement('h1');
        let h4 = document.createElement('h4');
        let h3 = document.createElement('h3');
        let button = document.createElement('button1');
        clearTable(tableEl);
        //styles for win condition
        mover.style.display = 'none';
        h1.textContent = 'GAME WON!!';
        h3.textContent = 'Minimum Moves '+minmoves[nextLevel];
        h4.textContent = 'Number of moves '+score;
        button.textContent = 'Play Again?';
        button.setAttribute('onclick', 'window.location.reload();');
        button.setAttribute('type', 'button');
        //adding win para to body and other child elements
        body.appendChild(winP);
        winP.appendChild(h1);
        winP.appendChild(h3);
        winP.appendChild(h4);
        winP.appendChild(button);
        body.style.justifyContent = 'center';
    };
    let lose = () => {
        //needed variables for end condition
        let looseP = document.createElement('section1');
        let para = document.createElement('p');
        let h1 = document.createElement('h1');
        let h2 = document.createElement('h2');
        let button2 = document.createElement('button2');
        clearTable(tableEl);
        //styles for end condition
        mover.style.display = 'none';
        h1.textContent = 'OOPS!! GAME OVER';
        h2.textContent = 'Number of moves '+score;
        para.textContent = 'Press the below button to restart.';
        button2.textContent = 'Restart?';
        button2.setAttribute('onclick', 'window.location.reload();');
        button2.setAttribute('type', 'button');
        //adding end para to body and other child elements
        body.appendChild(looseP);
        looseP.appendChild(h1);
        looseP.appendChild(h2);
        looseP.appendChild(para);
        looseP.appendChild(button2);
        body.style.justifyContent = 'center';
    };
    const clearTable = (tableEl) => {
        while (tableEl.firstChild) {
            tableEl.removeChild(tableEl.firstChild);
        }
    };
    let mover = document.createElement('div');

    function resetMover() {
        mover.style.left = '785px';
        mover.style.top = '320px';
        mover.setAttribute('id', 'player');
        mover.textContent = '`';
    }
    const drawMaze = () => {
        //creating a function to draw maze
        //defining basic layout
        divTable.appendChild(mover);
        resetMover();
        for (let i = 0; i < levels[nextLevel].length; i++) { //loop for tr's
            let rowEl = document.createElement('tr');
            tableEl.appendChild(rowEl);
            for (let x = 0; x < levels[nextLevel][i].length; x++) { //loop for td's
                let tdEl = document.createElement('td');
                rowEl.appendChild(tdEl)
                tdEl.innerHTML = levels[nextLevel][i].charAt(x);
                //conditionals below if the char is a specific character
                //then run the code below
                switch (levels[nextLevel][i].charAt(x)) {
                    case '#':
                        tdEl.setAttribute('class', 'wall');
                        break;
                    case '.':
                        tdEl.setAttribute('class', 'freespace');
                        break;
                    case '_':
                        tdEl.setAttribute('id', 'start');
                        break;
                    case '!':
                        tdEl.setAttribute('id', 'win');
                        break;
                    default:
                        tdEl.setAttribute('id','level');
                        break;
                }
            }
        };
    };
    // print the maze and table on the page
    drawMaze();
    window.addEventListener('keydown', event => {
        //mover based on which key is press then the action will occur
        switch (event.key) {
            case 'w':
                score +=1;
                mover.style.top = parseInt(mover.style.top) - 10 + 'px';
                //the mover moves on left and top axis then parseInt gives a interger
                break;
            case 'a':
                score +=1;
                mover.style.left = parseInt(mover.style.left) - 10 + 'px';
                break;
            case 's':
                score +=1;
                mover.style.top = parseInt(mover.style.top) + 10 + 'px';
                break;
            case 'd':
                score +=1;
                mover.style.left = parseInt(mover.style.left) + 10 + 'px';
                break;
        }
        //defining variables to use for win and lose conditions
        let pos = mover.getBoundingClientRect();
        let wins = document.getElementById('win').getBoundingClientRect();
        let walls = document.querySelectorAll('.wall');
        for (let wall of walls) {
            let wowWalls = wall.getBoundingClientRect();
            // checks for wall and player collision
            if (pos.x < wowWalls.x + wowWalls.width && pos.x + pos.width > wowWalls.x && pos.y < wowWalls.y + wowWalls.height && pos.y + pos.height > wowWalls.y) {
                lose();
            } else if (pos.x < wins.x + wins.width && pos.x + pos.width > wins.x && pos.y < wins.y + wins.height && pos.y + pos.height > wins.y) {
                won();
                break;
            }
            if (pos.x == 0) {
                lose();
            }
        }
    }); //end of eventListener
}; //end of on click function