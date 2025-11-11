from colorama import Fore, Back

if __name__ == "__main__":
    print(Fore.GREEN + 'Je hebt', end=" ")
    print(Fore.RED + 'je eerste', end=" ")
    print(Fore.YELLOW + 'package', end=" ")
    print(Fore.MAGENTA + 'vanuit je', end="")
    print(Fore.BLACK, Back.GREEN + 'requirements.txt', end="")
    print(Back.RESET, end=" ")
    print(Fore.CYAN + 'geïnstalleerd!')