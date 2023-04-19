const data = {
    currencies: {
      CLP: {
        name: "pais",
        valor: "50"
      }
    }
  };
      
  let key = Object.keys(data.currencies)[0];
  let { [key]: otro } = data.currencies;
  console.log(key)