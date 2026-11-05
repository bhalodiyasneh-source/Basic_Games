import sys
import random

if len(sys.argv) > 1:
    user_in = sys.argv[1]
    print(f"Your Input is : {user_in}\n")
    
    user_input = user_in.lower()
    choice = ["rock", "paper", "scissors"]
    com = random.choice(choice)
    
    print(f"Computer chose: {com}\n")
    
    if user_input == com:
        print("It's a tie!\n")
    elif user_input == "rock":
        if com == "scissors":
            print("You Win!\n")
        else:
            print("Sorry!!\n")
    elif user_input == "paper":
        if com == "rock":
            print("You Win!\n")
        else:
            print("Sorry!!\n")
    elif user_input == "scissors":
        if com == "paper":
            print("You Win!\n")
        else:
            print("Sorry!!\n")
    else:
        print("Invalid Input Please Enter Valid Inputs!!\n")
else:
    print("Enter Valid Inputs\n")