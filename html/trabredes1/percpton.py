pesos = 0.0
bias = 1

def treinar():
	somaErro = 1
	erro = 0.0
	iteracao = 1
	valores = [[0.0,0.0,0.0],
			   [0.0,1.0,1.0],
			   [1.0,0.0,1.0],
			   [1.0,1.0,1.0]]
maxIter = 1000
saida = 0.0
txAprend = 1.00
global pesos
global bias

while iteracao < maxIter and somaErro>0:
	somaErro=0
	for i in xrange(0,3):
		saida = pesos[0]*valores[i][0]+pesos[1]*valores[i][1]+bias
		if saida>=0:
			saida=1
			else
			saida = 0
			erro = valores[i][2]-saida
			pesos[0]=pesos[0]+txAprend*erro*valores[i][0]