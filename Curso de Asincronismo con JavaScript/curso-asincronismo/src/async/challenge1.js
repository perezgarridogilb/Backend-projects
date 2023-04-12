export async function runCode() {
    // Tu código aquí 👈
    const url = 'https://domain-api-com';
  
    try {
      const products = await fetch(url);
    } catch (error) {
      throw new Error('API Not Found');
    }
  
  
  }
  