
class Node(object):
    def __init__(self, data, next=None):
        self.data = data
        self.next = next
        
class TwoWayNode(Node):
    def __init__(self, data, previus=None, next=None):
        Node.__init__(self, data, next)
        self.previus = previus    
        
"""
from double_linked_list import Node, TwoWayNode
head = TwoWayNode(1)
tail = head
for data in range(2, 6):
    tail.next = TwoWayNode(data, tail)
    tail = tail.next

probe = tail

# Generamos de forma secuencial 2-5 y los estamos visitando de forma inversa
# Estamos llendo a la referencia del nodo que nos da previus
while probe != None:
     print(probe.data)
     probe = probe.previus

5
4
3
2
1
"""            