def is_palindrome(string: str) -> bool:
    string = string.replace(" ", "").lower()
    # Dar vuelta a un iterable
    return string == string[::-1]

    # Ana # ana # con lower

# endif point python ?
def run():
    print(is_palindrome(1000))

if __name__ == '__main__':
    run()