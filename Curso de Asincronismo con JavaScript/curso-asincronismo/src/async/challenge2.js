export async function runCode(url) {
    // Tu código aquí 👈
  
    const options = {
      method: 'GET'
    };
  
    try {
      new URL(url);
    } catch (error) {
      throw new Error('Invalid URL');
    }
    
    async function fetchData(url, options) {
  
        const response = await fetch(url, options);
   
        return response;
  
    }
  
  
      try {
        const response = await fetchData(url, options);
        const data = await response.json();
        return data;
      } catch (error) {
        throw new Error('Something was wrong');
  
      }
   
  
    
  }
  