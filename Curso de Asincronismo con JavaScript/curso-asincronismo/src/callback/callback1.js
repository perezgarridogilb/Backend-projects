export function execCallback(callback) {
    // Tu código aquí 👈
    callback(window.setTimeout(() => {
      console.log('Log after 2s');
    }, 2000))
  }
  