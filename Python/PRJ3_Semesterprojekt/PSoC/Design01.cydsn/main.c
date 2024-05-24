/* ========================================
 *
 * Copyright YOUR COMPANY, THE YEAR
 * All Rights Reserved
 * UNPUBLISHED, LICENSED SOFTWARE.
 *
 * CONFIDENTIAL AND PROPRIETARY INFORMATION
 * WHICH IS THE PROPERTY OF your company.
 *
 * ========================================
*/
#include "project.h"
#include "cytypes.h"

#define SLAVE_ADRESS 0x08
#define READ_BUF_SIZE 64
#define WRITE_BUF_SIZE 64

uint8 readBuffer[READ_BUF_SIZE];
uint8 writeBuffer[READ_BUF_SIZE];

int main(void)
{
    CyGlobalIntEnable; /* Enable global interrupts. */
    
    /* Place your initialization/startup code here (e.g. MyInst_Start()) */
    I2C_Start();
    UART_Start();
    
    I2C_SlaveInitReadBuf((uint8 *) readBuffer, READ_BUF_SIZE);
    I2C_SlaveInitWriteBuf((uint8 *) writeBuffer, WRITE_BUF_SIZE);
    
    /* Initializer readBuffer og writeBuffer */
    for (int i = 0; i < READ_BUF_SIZE; i++) {
        readBuffer[i] = 0; // Reponse from PSoC to be displayed on RPI.
    }
    
    for(;;)
    {
        /* Place your application code here. */
        while (0 == (I2C_SlaveStatus() & I2C_SSTAT_WR_CMPT)){ /* Vent på besked fra master */
            UART_PutString("Venter på besked fra master\n\n");
            CyDelay(500);
        };
        
        uint8 writeBufferSize = I2C_SlaveGetWriteBufSize();
        for (int i = 0; i < writeBufferSize; i++) {
            /* Behandling af writeBuffer[i] */
            char msg[50];
            sprintf(msg, "Data[%d]: %d\n", i, writeBuffer[i]); 
            UART_PutString(msg);
        }
        
        I2C_SlaveClearWriteBuf();
        I2C_SlaveClearWriteStatus();
        
        while (0 == (I2C_SlaveStatus() & I2C_SSTAT_RD_CMPT)){ /* Vent på at master anmoder om data fra slave */
            UART_PutString("Venter på anmodning fra master\n\n");
            CyDelay(500);
        }
        
        
        if (I2C_SlaveStatus() & I2C_SSTAT_WR_CMPT) {
            UART_PutString("Data sendt");
        }
        
        I2C_SlaveClearWriteBuf();
        I2C_SlaveClearWriteStatus();
        
    }
}

/* [] END OF FILE */
