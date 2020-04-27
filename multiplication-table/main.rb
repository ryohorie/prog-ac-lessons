for a in 1..9 do
  array = []
  for b in 1..9 do
    array.push a*b
  end
  puts array.join("\t")
end
