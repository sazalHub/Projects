import pygame
import sys
import time
import winsound

pygame.init()

field = pygame.display.set_mode((600,600))
pygame.display.set_caption("TicTacToe")
fps = pygame.time.Clock()

background = (128,255,255)
box = (255,255,255)
boxPos = [[5,5],[205,5],[405,5],[5,205],[205,205],[405,205],[5,405],[205,405],[405,405]]
drawSign = [[-600,-600],[70,50],[270,50],[470,50],[70,250],[270,250],[470,250],[70,450],[270,450],[470,450]]

playerPos = [[0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0],[0,0,0,0,0,0,0,0,0,0,0,0]]
player1 = []
player2 = []
selected = []
selectedPos = []
player1W = False
player2W = False

def Button(action=None):
    pos = pygame.mouse.get_pos()
    click = pygame.mouse.get_pressed()

    if 230<pos[0]<350 and 550<pos[1]<590:
        pygame.draw.rect(field,((0,230,0)),[230,550,120,40])
        if click[0]==1 and action!=None:
            action()
        else:
            pygame.draw.rect(field,((0,162,232)),[230,550,120,40])
    font = pygame.font.SysFont("comicsansms",20)
    text = font.render("Play Again",True,((255,255,255)),background)
    field.blit(text,(245,555))


def Show():
    font = pygame.font.SysFont("comicsansms", 80)
    one = font.render("0", True, ((230, 0, 14)))
    two = font.render("X", True, ((44, 0, 120)))

    for i in player1:
        field.blit(one,(drawSign[i]));
    for i in player2:
        field.blit(two,(drawSign[i]));

def checkResult(turn):
    global player1W,player2W
    flag = False
    if playerPos[turn][1]==playerPos[turn][2] and playerPos[turn][2]==playerPos[turn][3] and playerPos[turn][1]==1:
        flag = True;
    elif playerPos[turn][4] == playerPos[turn][5] and playerPos[turn][5] == playerPos[turn][6] and playerPos[turn][4]==1:
        flag = True;
    elif playerPos[turn][7] == playerPos[turn][8] and playerPos[turn][8] == playerPos[turn][9] and playerPos[turn][7]==1:
        flag = True;
    elif playerPos[turn][1] == playerPos[turn][4] and playerPos[turn][4] == playerPos[turn][7] and playerPos[turn][1]==1:
        flag = True;
    elif playerPos[turn][2] == playerPos[turn][5] and playerPos[turn][5] == playerPos[turn][8] and playerPos[turn][2]==1:
        flag = True;
    elif playerPos[turn][3] == playerPos[turn][6] and playerPos[turn][6] == playerPos[turn][9] and playerPos[turn][3]==1:
        flag = True;
    elif playerPos[turn][1] == playerPos[turn][5] and playerPos[turn][5] == playerPos[turn][9] and playerPos[turn][5]==1:
        flag = True;
    elif playerPos[turn][3] == playerPos[turn][5] and playerPos[turn][5] == playerPos[turn][7] and playerPos[turn][3]==1:
        flag = True;

    if flag==True:
        if turn == 1:
            player1W = True
        elif turn == 2:
            player2W = True

def checkSelected(select,turn):
    flag = 1
    for i in selectedPos:
        if i == select:
            flag = 0
            break
    if flag == 1:
        if turn==1:
            player1.append(select)
        else:
            player2.append(select)
        playerPos[turn][select] = 1;
        selectedPos.append(select)
        checkResult(turn)
        return True
    return False

def select(pos,turn):
    #print(turn)
    #print(pos)

    select = 0
    if (5 < pos[0] < 195 and 5 < pos[1] < 195):
        select = 1
    elif (205 < pos[0] < 395 and 5 < pos[1] < 195):
        select = 2
    elif (405 < pos[0] < 595 and 5 < pos[1] < 195):
        select = 3
    elif (5 < pos[0] < 195 and 205 < pos[1] < 395):
        select = 4
    elif (205 < pos[0] < 395 and 205 < pos[1] < 395):
        select = 5
    elif (405 < pos[0] < 595 and 205 < pos[1] < 395):
        select = 6
    elif (5 < pos[0] < 195 and 395 < pos[1] < 595):
        select = 7
    elif (205 < pos[0] < 395 and 395 < pos[1] < 595):
        select = 8
    elif (405 < pos[0] < 595 and 395 < pos[1] < 595):
        select = 9

    if select!=0:
        winsound.PlaySound("SystemExclamation", winsound.SND_ALIAS)
        return checkSelected(select,turn)
    return False

def PlayAgain():
    global playerPos;

    global player1W
    global player2W
    global player1
    global player2
    global selected
    global selectedPos

    playerPos = [[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],[0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]]
    player1 = []
    player2 = []
    selected = []
    selectedPos = []
    player1W = False
    player2W = False

    time.sleep(1)
    START()

def show(msg):
    print(msg)
    font = pygame.font.SysFont("comicsansms", 50)
    text = font.render(msg, True,((0,162,232)))

    while True:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                pygame.quit()
                sys.exit()

        if msg=="DRAW":
            field.blit(text, (200, 200))
        else:
            field.blit(text, (80, 110))

        Button(PlayAgain)
        pygame.display.update()
        fps.tick(10)

def mouse(turn):
    pos = pygame.mouse.get_pos()
    click = pygame.mouse.get_pressed()

    if click[0] == 1:
        fl = select(pos, turn)
        if fl == True:
            if turn == 1:
                turn = 2;
            else:
                turn = 1;
    return turn

def update():
    pygame.display.update()
    fps.tick(15)

def START():
    global player1W,player2W
    turn = 1
    while True:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                pygame.quit()
                sys.exit()

        field.fill(background)

        for p in boxPos:
            pygame.draw.rect(field, box, [p[0], p[1], 190, 190])

        Show()

        if player1W == True:
            winsound.PlaySound("SystemExit", winsound.SND_ALIAS)
            show("PLAYER-1 (0) WIN")
        elif player2W == True:
            winsound.PlaySound("SystemExit", winsound.SND_ALIAS)
            show("PLAYER-2 (X) WIN")
        elif len(selectedPos) == 9 and player1W == False and player2W == False:
            winsound.PlaySound("SystemAsterisk", winsound.SND_ALIAS)
            show("DRAW")

        turn = mouse(turn)

        update()

START()
pygame.quit()
sys.exit()