for(let i = 1; i <= 9; i++){
  const array = []
  for(let j = 1; j <= 9; j++){
    array.push(i*j)
  }
  console.log(array.join('\t'))
}
