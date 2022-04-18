
# 

class Queue:
    def __init__(self):
        # stack interno
        self.inbound_stack = []
        # stack externo
        self.outbound_stack = []
        
    def enqueue(self, data):
        """ Ading """
        self.inbound_stack.append(data)
        
    def dequeue(self):
        """ Removing """
        if not self.outbound_stack:
            while self.inbound_stack:
                    self.outbound_stack.append(self.inbound_stack.pop())  
                    
        return self.outbound_stack.pop() 
    
    """
from stack_based_queue import Queue
numbers = Queue()
numbers.enqueue(5)
numbers.enqueue(6)
numbers.enqueue(7)
print(numbers.inbound_stack)
[5, 6, 7]
print(numbers.inbound_stack)
[5, 6, 7]
numbers.dequeue()
5
print(numbers.outbound_stack)
[7, 6]
numbers.dequeue()
6
print(numbers.outbound_stack)
[7]
numbers.dequeue()
7
print(numbers.outbound_stack)
[]
print(numbers.inbound_stack)
[]
    """             