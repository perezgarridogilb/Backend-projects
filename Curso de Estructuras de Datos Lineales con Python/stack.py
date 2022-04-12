from node import Node

class Stack:
    # Método constructor
    def __init__(self):
        # Características
        # Saber qué hay hasta arriba del stack
        self.top = None
        # Puede estar creciendo o decreciendo (Dinámica)
        self.size = 0
        
    def push(self, data):
        node = Node(data)
        
        if self.top:
            # En caso de que haya un elemento
            node.next = self.top
            self.top = node
        else:
            self.top = node  
            
        self.size += 1
    
    def pop(self):
        if self.top:
            data = self.top.data
            self.size -= 1
            
            if self.top.next:
                self.top = self.top.next
            else:
                self.top = None
            
            return data
        
        else:
            return "The stack is empty"
        
    def peek(self):
        if self.top:
            return self.top.data
        else:
            return "The stack is empty" 
        
    
    def clear(self):
        while self.top:
            self.pop()    
            
""" 
from stack import Stack
food = Stack()
food.push('egg')
food.push('ham')
food.push('spam')
food.pop()
'spam'
food.peek()
'ham'
 """                               