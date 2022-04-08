from array import Array

class Grid(object):
    def __init__(self, rows, columns, fill_value=None):
        self.data = Array(rows)
        for row in range(rows):
            self.data[row] = Array(columns, fill_value)
            
    def get_height(self):
        return len(self.data) 
        
    def get_width(self):
        return len(self.data[0]) 
    
    def __getitem__(self, index):
        return self.data[index] 
    
    def __str__(self):
        result = ""
        
        for row in range(self.get_height()):
            for con in range(self.get_width()):
                result += str(self.data[row][con]) + " "
                
            result += "\n"  
            
            
        return str(result)        
    
    '''
Code used in the shell to instance a grid

matrix = Grid(3, 3)
print(matrix)
for row in range(matrix.get_height()):
    for column in range(matrix.get_width()):
        matrix[row][column] = row * column

print(matrix)
matrix.get_height()
matrix.get_width()
matrix.__getitem__()
matrix.__getitem__(1)
matrix.__getitem__(2)[0]
matrix.__str__()
'''       